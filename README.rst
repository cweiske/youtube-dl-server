*****************
youtube-dl server
*****************

Uses `youtube-dl`__ to fetch information about videos that
can be used to download the video.

__ http://rg3.github.io/youtube-dl/


Usage
=====
Use ``info.php`` with the ``url`` parameter::

  http://example.org/info.php?url=http://youtu...

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
