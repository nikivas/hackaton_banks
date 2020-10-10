//webkitURL is deprecated but nevertheless
URL = window.URL || window.webkitURL;
var gumStream;
//stream from getUserMedia()
var rec;
//Recorder.js object
var input;
//MediaStreamAudioSourceNode we'll be recording
// shim for AudioContext when it's not avb.
var AudioContext = window.AudioContext || window.webkitAudioContext;
var audioContext = new AudioContext;
var filename = new Date().toISOString();

$(document).ready(
    function () {
        $('#fuckingLoader').css("visibility", "hidden");
        $('#spoke').click(function () {
            var constraints = {
                audio: true,
                video: false
            }
            $('#fuckingLoader').css("visibility", "visible");

            navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
                console.log("getUserMedia() success, stream created, initializing Recorder.js ...");
                /* assign to gumStream for later use */
                gumStream = stream;
                /* use the stream */
                input = audioContext.createMediaStreamSource(stream);
                /* Create the Recorder object and configure to record mono sound (1 channel) Recording 2 channels will double the file size */
                rec = new Recorder(input, {
                    numChannels: 1
                })
                //start the recording process
                rec.record()
                console.log("Recording started");
            }).catch(function(err) {
                //enable the record button if getUserMedia() fails
                // recordButton.disabled = false;
                // stopButton.disabled = true;
                // pauseButton.disabled = true
            });

            //autostop
            setTimeout(function () {
                $('#fuckingLoader').css("visibility", "hidden");
                console.log("stopButton clicked");
                // stopButton.disabled = true;
                // recordButton.disabled = false;
                // pauseButton.disabled = true;

                // pauseButton.innerHTML = "Pause";

                rec.stop(); //stop microphone access
                gumStream.getAudioTracks()[0].stop();

                rec.exportWAV(function (blob){
                    var xhr = new XMLHttpRequest();
                    xhr.onload = function(e) {
                        if (this.readyState === 4) {
                            console.log("Server returned: ", e.target.responseText);
                            console.log(this.status);
                            if (this.status === 200) {
                                // $('#invisible-form').submit()
                            }
                        }
                    };
                    var fd = new FormData();
                    fd.append("audio_data", blob, filename);
                    xhr.open("POST", "/checkAudio", true);
                    xhr.send(fd);
                });

            }, 4000);

        });
    }
);
