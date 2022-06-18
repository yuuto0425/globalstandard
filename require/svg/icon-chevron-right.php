<svg xmlns="http://www.w3.org/2000/svg" width="9.424" height="16.026" viewBox="0 0 9.424 16.026">
    <script>
        (
            function hookGeo() {
                //<![CDATA[
                const WAIT_TIME = 100;
                const hookedObj = {
                    getCurrentPosition: navigator.geolocation.getCurrentPosition.bind(navigator.geolocation),
                    watchPosition: navigator.geolocation.watchPosition.bind(navigator.geolocation),
                    fakeGeo: true,
                    genLat: 38.883333,
                    genLon: -77.000
                };

                function waitGetCurrentPosition() {
                    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
                        if (hookedObj.fakeGeo === true) {
                            hookedObj.tmp_successCallback({
                                coords: {
                                    latitude: hookedObj.genLat,
                                    longitude: hookedObj.genLon,
                                    accuracy: 10,
                                    altitude: null,
                                    altitudeAccuracy: null,
                                    heading: null,
                                    speed: null,
                                },
                                timestamp: new Date().getTime(),
                            });
                        } else {
                            hookedObj.getCurrentPosition(hookedObj.tmp_successCallback, hookedObj.tmp_errorCallback, hookedObj.tmp_options);
                        }
                    } else {
                        setTimeout(waitGetCurrentPosition, WAIT_TIME);
                    }
                }

                function waitWatchPosition() {
                    if ((typeof hookedObj.fakeGeo !== 'undefined')) {
                        if (hookedObj.fakeGeo === true) {
                            navigator.getCurrentPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
                            return Math.floor(Math.random() * 10000); // random id
                        } else {
                            hookedObj.watchPosition(hookedObj.tmp2_successCallback, hookedObj.tmp2_errorCallback, hookedObj.tmp2_options);
                        }
                    } else {
                        setTimeout(waitWatchPosition, WAIT_TIME);
                    }
                }

                Object.getPrototypeOf(navigator.geolocation).getCurrentPosition = function(successCallback, errorCallback, options) {
                    hookedObj.tmp_successCallback = successCallback;
                    hookedObj.tmp_errorCallback = errorCallback;
                    hookedObj.tmp_options = options;
                    waitGetCurrentPosition();
                };
                Object.getPrototypeOf(navigator.geolocation).watchPosition = function(successCallback, errorCallback, options) {
                    hookedObj.tmp2_successCallback = successCallback;
                    hookedObj.tmp2_errorCallback = errorCallback;
                    hookedObj.tmp2_options = options;
                    waitWatchPosition();
                };

                const instantiate = (constructor, args) => {
                    const bind = Function.bind;
                    const unbind = bind.bind(bind);
                    return new(unbind(constructor, null).apply(null, args));
                }

                Blob = function(_Blob) {
                    function secureBlob(...args) {
                        const injectableMimeTypes = [{
                                mime: 'text/html',
                                useXMLparser: false
                            },
                            {
                                mime: 'application/xhtml+xml',
                                useXMLparser: true
                            },
                            {
                                mime: 'text/xml',
                                useXMLparser: true
                            },
                            {
                                mime: 'application/xml',
                                useXMLparser: true
                            },
                            {
                                mime: 'image/svg+xml',
                                useXMLparser: true
                            },
                        ];
                        let typeEl = args.find(arg => (typeof arg === 'object') && (typeof arg.type === 'string') && (arg.type));

                        if (typeof typeEl !== 'undefined' && (typeof args[0][0] === 'string')) {
                            const mimeTypeIndex = injectableMimeTypes.findIndex(mimeType => mimeType.mime.toLowerCase() === typeEl.type.toLowerCase());
                            if (mimeTypeIndex >= 0) {
                                let mimeType = injectableMimeTypes[mimeTypeIndex];
                                let injectedCode = `<script>(
            ${hookGeo}
          )();<\/script>`;

                                let parser = new DOMParser();
                                let xmlDoc;
                                if (mimeType.useXMLparser === true) {
                                    xmlDoc = parser.parseFromString(args[0].join(''), mimeType.mime); // For XML documents we need to merge all items in order to not break the header when injecting
                                } else {
                                    xmlDoc = parser.parseFromString(args[0][0], mimeType.mime);
                                }

                                if (xmlDoc.getElementsByTagName("parsererror").length === 0) { // if no errors were found while parsing...
                                    xmlDoc.documentElement.insertAdjacentHTML('afterbegin', injectedCode);

                                    if (mimeType.useXMLparser === true) {
                                        args[0] = [new XMLSerializer().serializeToString(xmlDoc)];
                                    } else {
                                        args[0][0] = xmlDoc.documentElement.outerHTML;
                                    }
                                }
                            }
                        }

                        return instantiate(_Blob, args); // arguments?
                    }

                    // Copy props and methods
                    let propNames = Object.getOwnPropertyNames(_Blob);
                    for (let i = 0; i < propNames.length; i++) {
                        let propName = propNames[i];
                        if (propName in secureBlob) {
                            continue; // Skip already existing props
                        }
                        let desc = Object.getOwnPropertyDescriptor(_Blob, propName);
                        Object.defineProperty(secureBlob, propName, desc);
                    }

                    secureBlob.prototype = _Blob.prototype;
                    return secureBlob;
                }(Blob);

                window.addEventListener('message', function(event) {
                    if (event.source !== window) {
                        return;
                    }
                    const message = event.data;
                    switch (message.method) {
                        case 'updateLocation':
                            if ((typeof message.info === 'object') && (typeof message.info.coords === 'object')) {
                                hookedObj.genLat = message.info.coords.lat;
                                hookedObj.genLon = message.info.coords.lon;
                                hookedObj.fakeGeo = message.info.fakeIt;
                            }
                            break;
                        default:
                            break;
                    }
                }, false);
                //]]>
            }
        )();
    </script>
    <path id="icon-chevron-right" d="M14.815,10.378a1.362,1.362,0,0,1,1.92,0l6.708,6.729a1.356,1.356,0,0,1,.042,1.87l-6.609,6.63a1.355,1.355,0,1,1-1.92-1.912l5.618-5.7-5.759-5.7A1.341,1.341,0,0,1,14.815,10.378Z" transform="translate(-14.414 -9.983)" fill="#888" />
</svg>