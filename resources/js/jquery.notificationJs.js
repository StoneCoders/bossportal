(function ($) {
	$.fn.notificationJs = function (options) {

		var defaults = {
			'position': 2,
			'background': '#384049',
			'color' : '#FFF',
			'message': 'Aucun message',
			'type': 'Information',
			'timeout': false
		}

		var parameters = $.extend(defaults, options);

		return this.each(function () {

			var $this = $(this);

			var $notifications = $('> .notifications', this);

			if ($notifications.length == 0) {
				$notifications = $('<div class="notifications"></div>');
				$this.append($notifications);
			}

			var $notification = $('<div class="notification"></div>');

			$notifications.append($notification);

			$left = $('<div class="left"></div>');
			$right = $('<div class="right"></div>');
			$circle = $('<div class="circle"></div>');

			$notification.append($left);
			$left.append($circle);
			$notification.append($right);

			var $type;

			if (parameters.position == 1) {
				$notifications.css({'left': '0px', 'top': '0px'});
			} else if (parameters.position == 2) {
				$notifications.css({'right': '0px', 'top': '0px'});
			} else if (parameters.position == 3) {
				$notifications.css({'left': '0px', 'bottom': '0px'});
			} else {
				$notifications.css({'right': '0px', 'bottom': '0px'});
			}

			$notification.css({'background': parameters.background, 'color': parameters.color});

			if (parameters.type == 'Success') {
				$type = '#34B367';
			} else if (parameters.type == 'Information') {
				$type = '#33B0F7';
			} else if (parameters.type == 'Warning') {
				$type = '#D8832C';
			} else if (parameters.type == 'Error') {
				$type = '#E61414';
			}

			$circle.css('background-color', $type);

			$notification.slideDown(400);
			$right.append(parameters.message);

			$circle.css({'margin-top' : $notification.height() / 2 - $circle.height() / 2 + 'px'});


			if (parameters.timeout) {
				setTimeout(function(){
					$notification.trigger('click');
				}, parameters.timeout);
			}

			$notification.click(function (e) {
				e.preventDefault();
				$notification.slideUp(400, function () {
					if ($notification.siblings().length == 0) {
						$notifications.remove();
					}
					$notification.remove();
				});
			});
		});
	};
})(jQuery);

