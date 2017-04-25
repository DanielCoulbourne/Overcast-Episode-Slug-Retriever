# Overcast Episode Slug Retriever

[Overcast](https://overcast.fm/) currently uses slugs [which cannot be retrieved programatically](https://twitter.com/marcoarment/status/856613907917680640). I wanted to make [an app](http://sharepod.dev) that linked to Podcast episodes in Overcast directly, so I need episode slugs to generate those URLS.

For now I'll be hosting this as an [API on my server](http://overcastslugs.coulbourne.work).

If you intend to do more than a few random lookups here and there please don't hose my server, just pull the repo down and stand it up yourself.

This API will be slow because it depends on HTML scraping and parsing for its results. I hope one day Marco provides an endpoint for us to retrieve episode metadata, but it's his app and he's free to spend his time on it however he sees fit.

I would love to include the MP3 URL in the returned array, but I'd have to make another HTTP request to the episode page to get it so I opted not to.