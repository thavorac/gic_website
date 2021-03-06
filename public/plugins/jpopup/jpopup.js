function jPopup(config) {

	var classBase = "popup";
	var popup_color='#AED6F1';
	
	var defaults = {
		title: "",
		content: "",
		buttons: [],
		popupClass: classBase+" "+popup_color,
		wrapperClass: classBase+"_wrapper",
		overlayClass: classBase+"_overlay",
		titleClass: classBase+"_title",
		contentClass: classBase+"_content",
		buttonsClass: classBase+"_buttons",
		overflowXClass: classBase+"_overflow_x",
		overflowYClass: classBase+"_overflow_y",
		scrollTopClass: classBase+"_scroll_top",
		scrollBottomClass: classBase+"_scroll_bottom",
		closeButtonClass: classBase+"_close",
		closeButtonContent: "<svg fill=\"#FFFFFF\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z\"/></svg>",
		closeButton: false,
		overlay: true,
		overlayClose: false,
		draggable: false,
		position: "center",
		offset: {
			x: 0,
			y: 0
		},
		speed: 200,
		stickToBottom: true,
		keyClose: false
	};
	
	config = $.extend(defaults, config);
	
	var popupBase = $("<div><div class=\""+config["overlayClass"]+"\" style=\"position: fixed; top: 0; left: 0; bottom: 0; right: 0;\"></div><div class=\""+config["wrapperClass"]+"\" style=\"opacity: 0;\" data-popup><form class=\""+config["popupClass"]+"\" style=\"position: relative; float: left;\"><div class=\""+config["titleClass"]+"\">"+config["title"]+"</div><div class=\""+config["contentClass"]+"\">"+config["content"]+"</div><div class=\""+config["buttonsClass"]+"\">"+getButtons()+"</div><div class=\""+config["closeButtonClass"]+"\">"+config["closeButtonContent"]+"</div></form></div></div>");
	var popupWrapper = popupBase.children("div:last-child");
	var popup =  popupWrapper.children("form");
	var popupOverlay = popupBase.children("div:first-child");
	var popupTitle = popup.children("."+config["titleClass"]);
	var popupContent = popup.children("."+config["contentClass"]);
	var popupButtons = popup.children("."+config["buttonsClass"]);
	var popupClose = popup.children("."+config["closeButtonClass"]);
	
	var state,
		top,
		fX,
		fX,
		y,
		x,
		dragging = false,
		onResize,
		onMouseMove;

	function freeze() {
		top = $("html").scrollTop();
		if($("html").css("position") != "fixed" && config["overlay"]) {
			$("html").css({"width": "100%", "height": "100%", "position": "fixed", "top": -top});
		}
	}
	function unfreeze() {
		if($("html").css("position") == "fixed" && !$("[data-popup][data-overlay]").length) {
			$("html").css("position", "static");
			$("html").scrollTop(-parseInt($("html").css("top")));
			$("html").css({"width": "", "height": "", "top": 0});
		}
	}
	function open() {
		$("body").append(popupOverlay).append(popupWrapper);
		setDepth();
		setOverlay();
		setCloseButton();
		setDraggable();
		setPosition();
		setOffset();
		overflow();
		scrollTop();
		popupWrapper.attr("data-position", config["position"]).fadeTo(config["speed"], 1);
		state = true;
	}
	function close() {
		//reloadPage();

		popupTitle.off("mousedown touchstart");
		popupContent.off("scroll");
		popupWrapper.off("click mousedown touchstart mmouseup touchend");
		$(window).off("resize", onResize);
		$(document).off("mousemove touchmove", onMouseMove);
		popupWrapper.fadeOut(config["speed"], function() {
			popupWrapper.remove();
			unfreeze();
		});
		popupOverlay.fadeOut(config["speed"], function() {
			popupOverlay.remove();
		});
		state = false;
	}
	function setOverlay() {
		if(config["overlay"]) {
			popupWrapper.attr("data-overlay", "");
			popupOverlay.css("z-index", popupWrapper.css("z-index")).show();
			//freeze();
		} else {
			popupWrapper.removeAttr("data-overlay");
			popupOverlay.hide();
			unfreeze();
		}
	}
	function setDraggable() {
		if(config["draggable"]) {
			popupTitle.css("cursor", "move");
			if((config["position"] == "bottom" || config["position"] == "bottomLeft" || config["position"] == "bottomRight" || config["position"] == "stretchBottom") && config["stickToBottom"]) {
				stickToBottom = false;
				setPosition();
			}
		} else {
			popupTitle.css("cursor", "inherit");
		}
	}
	function setCloseButton() {
		if(config["closeButton"]) {
			popupClose.show();
		} else {
			popupClose.hide();
		}
	}
	function setPosition() {
		switch(config["position"]) {
			case "center":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "50%", "left": "50%", "bottom": "", "right": ""});
				popup.css({"width": "", "height": "", "position": "relative", "top":"-150px", "left": -popup.outerWidth() / 2, "bottom": ""});
				break;
			case "top":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": 0, "left": "50%", "bottom": "", "right": ""});
				popup.css({"width": "", "height": "", "position": "relative", "top": 0, "left": -popup.outerWidth() / 2, "bottom": ""});
				break;
			case "left":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "50%", "left": 0, "bottom": "", "right": ""});
				popup.css({"width": "", "height": "", "position": "relative", "top": -popup.outerHeight() / 2, "left": 0, "bottom": ""});
				break;
			case "bottom":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "", "left": "50%", "bottom": 0, "right": ""});
				if((config["position"] == "bottom" || config["position"] == "bottomLeft" || config["position"] == "bottomRight" || config["position"] == "stretchBottom") && !config["draggable"]) {
					popup.css({"position": "absolute", "top": "", "left": -popup.outerWidth() / 2, "bottom": 0});
				} else {
					popup.css({"width": "", "height": "", "position": "relative", "top": -popup.outerHeight(), "left": -popup.outerWidth() / 2, "bottom": ""});
				}
				break;
			case "right":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "50%", "left": "", "bottom": 0, "right": 0});
				popup.css({"width": "", "height": "", "position": "relative", "top": -popup.outerHeight() / 2, "left": -popup.outerWidth(), "bottom": ""});
				break;
			case "topLeft":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": 0, "left": 0, "bottom": "", "right": ""});
				popup.css({"width": "", "height": "", "position": "relative", "top": 0, "left": 0, "bottom": ""});
				break;
			case "topRight":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": 0, "left": "", "bottom": "", "right": 0});
				popup.css({"width": "", "height": "", "position": "relative", "top": 0, "left": -popup.outerWidth(), "bottom": ""});
				break;
			case "bottomLeft":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "", "left": "0", "bottom": 0, "right": ""});
				if((config["position"] == "bottom" || config["position"] == "bottomLeft" || config["position"] == "bottomRight" || config["position"] == "stretchBottom") && !config["draggable"]) {
					popup.css({"position": "absolute", "top": "", "left": 0, "bottom": 0});
				} else {
					popup.css({"width": "", "height": "", "position": "relative", "top": -popup.outerHeight(), "left": 0, "bottom": ""});
				}
				break;
			case "bottomRight":
				popupWrapper.css({"width": 0, "height": 0, "position": "fixed", "top": "", "left": "", "bottom": 0, "right": 0});
				if((config["position"] == "bottom" || config["position"] == "bottomLeft" || config["position"] == "bottomRight" || config["position"] == "stretchBottom") && !config["draggable"]) {
					popup.css({"position": "absolute", "top": "", "left": -popup.outerWidth(), "bottom": 0});
				} else {
					popup.css({"width": "", "height": "", "position": "relative", "top": -popup.outerHeight(), "left": -popup.outerWidth(), "bottom": ""});
				}
				break;
			case "stretchTop":
				popupWrapper.css({"width": "100%", "height": 0, "position": "fixed", "top": 0, "left": 0, "bottom": "", "right": ""});
				popup.css({"width": "100%", "height": "", "position": "relative", "top": 0, "left": 0, "bottom": ""});
				break;
			case "stretchLeft":
				popupWrapper.css({"width": 0, "height": "100%", "position": "fixed", "top": 0, "left": 0, "bottom": "", "right": ""});
				popup.css({"width": "", "height": "100%", "position": "relative", "top": 0, "left": 0, "bottom": ""});
				break;
			case "stretchBottom":
				popupWrapper.css({"width": "100%", "height": 0, "position": "fixed", "top": "", "left": 0, "bottom": 0, "right": ""});
				if((config["position"] == "bottom" || config["position"] == "bottomLeft" || config["position"] == "bottomRight" || config["position"] == "stretchBottom") && !config["draggable"]) {
					popup.css({"width": "100%", "height": "", "position": "absolute", "top": "", "left": 0, "bottom": 0});
				} else {
					popup.css({"width": "100%", "height": "", "position": "relative", "top": -popup.outerHeight(), "left": 0, "bottom": ""});
				}
				break;
			case "stretchRight":
				popupWrapper.css({"width": 0, "height": "100%", "position": "fixed", "top": 0, "left": "", "bottom": "", "right": 0});
				popup.css({"width": "", "height": "100%", "position": "relative", "top": 0, "left": -popup.outerWidth(), "bottom": ""});
				break;
		}
	}
	function boundary() {
		//Bottom
		if($(window).height() - popup.offset().top - popup.outerHeight() + $("html").scrollTop() < 0) {
			popup.offset({top: $(window).height() - popup.outerHeight() + $("html").scrollTop()});
		}
		//Right
		if($(window).width() - popup.offset().left - popup.outerWidth() < 0) {
			popup.offset({left: $(window).width() - popup.outerWidth()});
		}
		//Top
		if(popup.offset().top - $("html").scrollTop() < 0 && (config["draggable"] || config["position"] != "bottom")) {
			popup.offset({top: $("html").scrollTop()});
		}
		//Left
		if(popup.offset().left < 0) {
			popup.offset({left: 0});
		}
	}
	function overflow() {
		popupWrapper.removeClass(config["overflowXClass"]+" "+config["overflowYClass"]);
		var overflowX = popup.outerWidth() > $(window).width() ? true:false;
		var overflowY = popup.outerHeight() > $(window).height() ? true:false;
		if(overflowX) {
			popupWrapper.addClass(config["overflowXClass"]);
		}
		if(overflowY) {
			popupWrapper.addClass(config["overflowYClass"]);
		}
	}
	function scrollTop() {
		//Top
		if(!popupContent.scrollTop()) {
			popupWrapper.addClass(config["scrollTopClass"]);
		} else {
			popupWrapper.removeClass(config["scrollTopClass"]);
		}
		//Bottom
		if(!(popupContent.prop("scrollHeight") - popupContent.height() - popupContent.scrollTop())) {
			popupWrapper.addClass(config["scrollBottomClass"]);
		} else {
			popupWrapper.removeClass(config["scrollBottomClass"]);
		}
	}
	function setDepth() {
		popupWrapper.css("z-index", maxDepth() + 1);
	}
	function sortDepth() {
		var currentDepth = popupWrapper.css("z-index");
		var currentMaxDepth = maxDepth();
		$("[data-popup]").each(function() {
			var depth = parseInt($(this).css("z-index"));
			if(depth > currentDepth) {
				$(this).css("z-index", depth - 1);
			}
		});
		popupWrapper.css("z-index", currentMaxDepth);
	}
	function maxDepth() {
		var depths = [9999];
		$("[data-popup]").each(function() {
			var depth = parseInt($(this).css("z-index"));
			if(depth) {
				depths.push(depth);
			}
		});
		return Math.max.apply(Math, depths);
	}
	function setOffset(fOffsetX, fOffsetY) {
		fOffsetY = fOffsetY == undefined ? config["offset"]["y"]:fOffsetY;
		fOffsetX = fOffsetX == undefined ? config["offset"]["x"]:fOffsetX;
		fY = popup.offset().top;
		fX = popup.offset().left;
		popup.offset({
			top: fY - fOffsetY,
			left: fX + fOffsetX
		});
		boundary();
	}
	function getOffset() {
		var getOffset = {};
		switch(config["position"]) {
			case "center":
			case "left":
			case "right":
				getOffset["y"] = popupWrapper.offset().top - popup.offset().top - popup.outerHeight() / 2;
				break;
			case "top":
			case "topLeft":
			case "topRight":
			case "stretchTop":
			case "stretchLeft":
			case "stretchRight":
				getOffset["y"] = popupWrapper.offset().top - popup.offset().top;
				break;
			case "bottom":
			case "bottomLeft":
			case "bottomRight":
			case "stretchBottom":
				getOffset["y"] = popupWrapper.offset().top - popup.offset().top - popup.outerHeight();
				break;
		}
		switch(config["position"]) {
			case "center":
			case "top":
			case "bottom":
				getOffset["x"] = popup.offset().left - popupWrapper.offset().left + popup.outerWidth() / 2;
				break;
			case "left":
			case "topLeft":
			case "bottomLeft":
			case "stretchTop":
			case "stretchLeft":
			case "stretchBottom":
				getOffset["x"] = popup.offset().left - popupWrapper.offset().left;
				break;
			case "right":
			case "topRight":
			case "bottomRight":
			case "stretchRight":
				getOffset["x"] = popup.offset().left - popupWrapper.offset().left + popup.outerWidth();
		}
		getOffset["y"] = Math.round(getOffset["y"]);
		getOffset["x"] = Math.floor(getOffset["x"]);
		return getOffset;
	}
	function getButtons() {
		var buttons = "";
		for(var x = 0; x < config["buttons"].length; x++) {
			var bClass = config["buttons"][x]["class"] ? " class="+config["buttons"][x]["class"]:"";
			var bCheckForm = config["buttons"][x]["checkForm"] ? " data-checkform=true":"";
			var bClose = config["buttons"][x]["close"] === false ? " data-close="+config["buttons"][x]["close"]:"";
			var bValue = config["buttons"][x]["value"] !== undefined	? " data-value="+config["buttons"][x]["value"]:"";
			var bText = config["buttons"][x]["text"] || "";
			if(x==0)
				buttons += "<b"+bClass+bClose+bCheckForm+bValue+" style='margin-left:9px;float:left;cursor:default;background-color:none;'>"+bText+"</b>";
			else
				buttons += "<button"+bClass+bClose+bCheckForm+bValue+">"+bText+"</button>";
		}

		return buttons;

	}
	function hasFormValidation() {
		return (typeof document.createElement( 'input' ).checkValidity == 'function');
	}
	this.open = function(f) {
		var r = $.Deferred();
		open();
		$(".number_only").keypress(function (e) {
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				return false;
			}
		});


		$('#add_col_ok').on('click', function(e) {

			e.preventDefault();
			var colHeader = $('#name_exam').val();
			var percentage = $('#percentage').val();
			if(colHeader) {
				if(percentage) {

					if(cellChanges.length > 0 || cellScoreChanges.length > 0) {
						notify('error', 'info', 'You have not save your changes!');
					} else {
						addColumns(colHeader, percentage);
						close();
						closed = true;
					}

				} else {
					notify('error', 'info', 'Please Input Percentage!!');
				}

			} else {
				notify('error', 'info', 'Please Input Column Name!!');
			}

		});
		popupClose.on("click", function(e) {
			e.preventDefault();
			close();
		});
		popupContent.on("scroll", function() {
			scrollTop();
		});
		onResize = function() {
			boundary();
			overflow();
			scrollTop();
		}
		$(window).on("resize", onResize);
		popupTitle.on("mousedown touchstart", function(e) {
			if(config["draggable"]) {
				dragging = true;
				fY = popup.offset().top;
				fX = popup.offset().left;
				y = e.pageY || e.originalEvent.touches[0].pageY;
				x = e.pageX || e.originalEvent.touches[0].pageX;
				popup.css("user-select", "none");
			}
		});
		onMouseMove = function(e) {
			if(dragging && config["draggable"]) {
				mY = e.pageY == undefined ? e.originalEvent.touches[0].pageY:e.pageY;
				mX = e.pageX == undefined ? e.originalEvent.touches[0].pageX:e.pageX;
				popup.offset({
					top: fY + mY - y,
					left: fX + mX - x
				});
				boundary();
			}
		};
		$(document).on("mousemove touchmove", onMouseMove);
		popupWrapper.on("mouseup touchend", function(e) {
			if(config["draggable"]) {
				dragging = false;
				popup.css("user-select", "inherit");
			}
		});
		popupWrapper.on("mousedown touchstart", function() {
			if(config["draggable"]) {
				sortDepth();
			}
		});
		popupOverlay.on("click", function() {
			if(config["overlayClose"]) {
				close();
			}
		});
		$(document).on("keydown", function(e) {
			if(e.which == config["keyClose"] && popupWrapper.css("z-index") == maxDepth() && state) {
				close();
			}
		});
		return r.progress(f);
	};
	this.close = function() {
		alert('t');
		close();
		return this;
	};
	this.addClass = function(fClass) {
		popupWrapper.addClass(fClass);
		return this;
	};
	this.removeClass = function(fClass) {
		popupWrapper.removeClass(fClass);
		return this;
	};
	this.title = function(fTitle) {
		if(fTitle == undefined) {
			return config["title"];
		} else {
			popupTitle.html(fTitle);
			config["title"] = fTitle;
			return this;
		}
	};
	this.content = function(fContent) {

		if(fContent == undefined) {
			return config["content"];
		} else {
			popupContent.html(fContent);
			config["content"] = fContent;
			return this;
		}

	};
	this.buttons = function(fButtons) {
		if(fButtons == undefined) {
			return config["buttons"];
		} else {
			config["buttons"] = fButtons;
			popupButtons.html(getButtons());
			return this;
		}
	};
	this.overlay = function(fOverlay) {
		if(fOverlay == undefined) {
			return config["overlay"];
		} else {
			config["overlay"] = fOverlay ? true:false;
			setOverlay();
			return this;
		}
	};
	this.draggable = function(fDraggable) {
		if(fDraggable == undefined) {
			return config["draggable"];
		} else {
			config["draggable"] = fDraggable ? true:false;
			setDraggable();
			return this;
		}
	};
	this.closeButton = function(fCloseButton) {
		if(fCloseButton == undefined) {
			return config["closeButton"];
		} else {
			config["closebutton"] = fCloseButton ? true:false;
			setCloseButton();
			return this;
		}
	}
	this.popupClass = function(fClass) {
		if(fClass == undefined) {
			return config["popupClass"];
		} else {
			popup.removeClass(config["popupClass"]).addClass(fClass);
			config["popupClass"] = fClass;
			return this;
		}
	};
	this.wrapperClass = function(fClass) {
		if(fClass == undefined) {
			return config["wrapperClass"];
		} else {
			popupWrapper.removeClass(config["wrapperClass"]).addClass(fClass);
			config["wrapperClass"] = fClass;
			return this;
		}
	};
	this.overlayClass = function(fClass) {
		if(fClass == undefined) {
			return config["overlayClass"];
		} else {
			popupOverlay.removeClass(config["overlayClass"]).addClass(fClass);
			config["overlayClass"] = fClass;
			return this;
		}
	};
	this.titleClass = function(fClass) {
		if(fClass == undefined) {
			return config["titleClass"];
		} else {
			popupTitle.removeClass(config["titleClass"]).addClass(fClass);
			config["titleClass"] = fClass;
			return this;
		}
	};
	this.contentClass = function(fClass) {
		if(fClass == undefined) {
			return config["contentClass"];
		} else {
			popupContent.removeClass(config["contentClass"]).addClass(fClass);
			config["contentClass"] = fClass;
			return this;
		}
	};
	this.buttonsClass = function(fClass) {
		if(fClass == undefined) {
			return config["buttonsClass"];
		} else {
			popupButtons.removeClass(config["buttonsClass"]).addClass(fClass);
			config["buttonsClass"] = fClass;
			return this;
		}
	};
	this.overflowXClass = function(fClass) {
		if(fClass == undefined) {
			return config["overflowXClass"];
		} else {
			popupWrapper.removeClass(config["overflowXClass"]).addClass(fClass);
			config["overflowXClass"] = fClass;
			return this;
		}
	};
	this.overflowYClass = function(fClass) {
		if(fClass == undefined) {
			return config["overflowYClass"];
		} else {
			popupWrapper.removeClass(config["overflowYClass"]).addClass(fClass);
			config["overflowYClass"] = fClass;
			return this;
		}
	};
	this.scrollTopClass = function(fClass) {
		if(fClass == undefined) {
			return config["scrollTopClass"];
		} else {
			popupWrapper.removeClass(config["scrollTopClass"]).addClass(fClass);
			config["scrollTopClass"] = fClass;
			return this;
		}
	};
	this.scrollBottomClass = function(fClass) {
		if(fClass == undefined) {
			return config["scrollBottomClass"];
		} else {
			popupWrapper.removeClass(config["scrollBottomClass"]).addClass(fClass);
			config["scrollBottomClass"] = fClass;
			return this;
		}
	};
	this.closeButtonClass = function(fClass) {
		if(fClass == undefined) {
			return config["closeButtonClass"];
		} else {
			popupClose.removeClass(config["closeButtonClass"]).addClass(fClass);
			config["closeButtonClass"] = fClass;
			return this;
		}
	};
	this.closeButtonContent = function(fCloseButtonContent) {
		if(fCloseButtonHTML == undefined) {
			return config["closeButtonContent"];
		} else {
			popupClose.html(fCloseButtonContent);
			config["closeButtonContent"] = fCloseButtonContent;
			return this;
		}
	};
	this.speed = function(fFadeTime) {
		if(fSpeed == undefined) {
			return config["speed"];
		} else {
			config["speed"] = fSpeed;
			return this;
		}
	};
	this.position = function(fPosition) {
		if(fPosition == undefined) {
			return config["position"];
		} else {
			popupWrapper.removeAttr("data-position").attr("data-position", fPosition);
			config["position"] = fPosition;
			config["offset"]["y"] = 0;
			config["offset"]["x"] = 0;
			setPosition();
			setPosition();
			return this;
		}
	};
	this.offset = function(fOffset) {
		if(fOffset == undefined) {
			return getOffset();
		} else {
			var offsetY = fOffset["y"] == undefined ? 0:fOffset["y"];
			var offsetX = fOffset["x"] == undefined ? 0:fOffset["x"];
			setOffset(offsetX, offsetY);
			return this;
		}
	};
	this.overlayClose = function(fOverlayClose) {
		if(fOverlayClose == undefined) {
			return config["overlayClose"];
		} else {
			config["overlayClose"] = fOverlayClose ? true:false;
			return this;
		}
	};
	this.stickToBottom = function(fStickToBottom) {
		if(fStickToBottom == undefined) {
			return config["stickToBottom"];
		} else {
			config["stickToBottom"] = fStickToBottom ? true:false;
			config["offset"]["y"] = 0;
			config["offset"]["x"] = 0;
			setPosition();
			setPosition();
		}
	};
	this.keyClose = function(fKeyClose) {
		if(fKeyClose == undefined) {
			return config["keyClose"];
		} else {
			config["keyClose"] = fKeyClose ? fKeyClose:false;
		}
	};
	this.popupWrapper = function() {
		return popupWrapper;
	};
	this.popupOverlay = function() {
		return popupOverlay;
	};
	this.popup = function() {
		return popup;
	};
	this.popupTitle = function() {
		return popupTitle;
	};
	this.popupContent = function() {
		return popupContent;
	};
	this.popupButtons = function() {
		return popupButtons;
	};
	this.popupClose = function() {
		return popupClose;
	};

}


