function invokeBideo() {
    var bv = new Bideo();
    bv.init({
        // Video element
        videoEl: document.querySelector('#background_video'),

        // Container element
        container: document.querySelector('body'),

        // Resize
        resize: true,

        // autoplay: false,

        isMobile: window.matchMedia('(max-width: 768px)').matches,

        playButton: document.querySelector('#play'),
        pauseButton: document.querySelector('#pause'),

        // Array of objects containing the src and type
        // of different video formats to add

        //   src: [
        //     {
        //       src: 'http://zvapp.test/videos/night.mp4',
        //       type: 'video/mp4'
        //     },
        //   ],

        src: [
            {
            src: 'https://empta-zvapp.s3-ap-southeast-1.amazonaws.com/video/night.mp4',
            type: 'video/mp4'
            },
        ],

        // What to do once video loads (initial frame)
        onLoad: function () {
            document.querySelector('#video_cover').style.display = 'none';
        }
    });
}

export default invokeBideo;
