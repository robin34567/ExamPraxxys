<template>
    <div class="row">
        <section class="content">
            <div class="box box-primary">
                <div class="box-body center">
                    <video
                        id="my-video"
                        class="video-js"
                        controls preload="auto"
                        width="640"
                        height="264"
                        poster="MY_VIDEO_POSTER.jpg"
                        data-setup="{}"
                    >
                        <source src="MY_VIDEO.mp4" type="video/mp4" />
                        <source src="MY_VIDEO.webm" type="video/webm" />
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/city" target="_blank"
                                >supports HTML5 video</a
                            >
                        </p>
                    </video>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    
    
}
</script>