*****************
youtube-dl server
*****************

Uses `youtube-dl`__ to fetch information about videos that
can be used to download the video.


Usage
=====
Use ``get.php`` with the ``url`` parameter::

  http://example.org/get.php?url=http://youtu...

It will return JSON data about the video.
Same format as ``youtube-dl --dump-json`` returns.


Dependencies
============
* PHP


License
=======
AGPLv3 or later.


Alternatives
============
* youtube-dl-api-server__

__ https://github.com/jaimeMF/youtube-dl-api-server
