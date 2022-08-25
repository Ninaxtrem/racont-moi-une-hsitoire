var audio = {
    init: function () {
        var $that = this;
        $(function () {
            $that.components.media();
        });
    },
    components: {
        media: function (target) {
            var media = $('audio.fc-media', (target !== undefined) ? target : 'body');
            if (media.length) {
                media.mediaelementplayer({
                    audioHeight: 40,
                    features: ['playpause', 'current', 'duration', 'progress', 'volume', 'tracks', 'fullscreen'],
                    alwaysShowControls: true,
                    timeAndDurationSeparator: '<span></span>',
                    iPadUseNativeControls: true,
                    iPhoneUseNativeControls: true,
                    AndroidUseNativeControls: true
                });
            }
        },

    },
};
audio.init();


$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
      