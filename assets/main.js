(function ($, undefined) {

    $(window).on('mousemove', function(e) {

        var $cursor = $('#cursor'),
            $target = $('.cursorable--hovered > .cursorable__target--compact'),
            cursorPosition = {
                left: e.clientX,
                top: e.clientY
            },
            targetPosition = {
                left: 0,
                top: 0
            },
            distance = {
                x: 0,
                y: 0
            },
            angle = 0,
            hypotenuse = 0,
            offsetX = 0,
            offsetY = 0;

        $cursor.css({
            'left': cursorPosition.left,
            'top': cursorPosition.top,
        });

        if ($target.length !== 0) {

            targetPosition = {
                left: $target[0].getBoundingClientRect().x + $target[0].getBoundingClientRect().width / 2,
                top: $target[0].getBoundingClientRect().y + $target[0].getBoundingClientRect().height / 2
            };

            distance = {
                x: targetPosition.left - cursorPosition.left,
                y: targetPosition.top - cursorPosition.top
            };

            angle = Math.atan2(distance.x, distance.y);
            hypotenuse = Math.sqrt(distance.x * distance.x + distance.y * distance.y);

            if ($target.hasClass('cursorable__target--compact')) {
                offsetX = -(Math.sin(angle) * hypotenuse / 4),
                    offsetY = -(Math.cos(angle) * hypotenuse / 4);
            }
            // else {
            // 	offsetX = cursorPosition.left - $target[0].getBoundingClientRect().width + $target[0].getBoundingClientRect().x,
            // 	offsetY = cursorPosition.top - $target[0].getBoundingClientRect().y
            // }

            $target.find_closest('.cursorable__cursor').css('transform', 'translate('+offsetX+'px, '+offsetY+'px)');
        }
    });

})(jQuery);
