---
layout: post
title: How I fixed my over fourteen second, 31 HTTP request website.
published: 2015-03-26 09:00:00 -0700
modified: 2015-03-26 09:00:00 -0700
tags: [web, performance]
image: /img/posts/fixed-fourteen-second-load/fast-waterfall.png
excerpt: >
  When my portfolio initially went online it was hosted with Heroku on their free tier. This was great.  It was fast and easy to deploy with git but only after the server warmed up.

  I noticed that some page loads were taking over fourteen seconds and 31 HTTP requests to download all of the content for that page. Fourteen seconds! This was unacceptable and I knew that it had to be fixed fast.
---
**The problem with my slow site.**

When my portfolio initially went online it was hosted with [Heroku](http//www.heroku.com) on their free tier. This was great.  It was fast and easy to deploy with `git` but only after the server warmed up.

I noticed that some page loads were taking over fourteen seconds and 31 HTTP requests to download all of the content for that page. Fourteen seconds! This was unacceptable and I knew that it had to be fixed fast.

<a href="{{ site.url }}/img/posts/fixed-fourteen-second-load/slow-waterfall.png"><img class="img-responsive" src="{{ site.url }}/img/posts/fixed-fourteen-second-load/slow-waterfall.png" alt="Fourteen second, 31 HTTP request waterfall"/></a>

To understand why this is we have to take a look at one of the key "features" of the Heroku free tier, server sleeping. Once a Heroku app with only one instance has been idle for an hour Heroku will sleep the server to save resources.  Unfortunately my site is that that active and I hit the one hour with no hits fairly frequently.

**Architecting a solution.**

My initial thought was to prevent Heroku from sleeping my server. The only way to do this is to add another server. The total for adding that server came to around $34.50 per month. It's not a bad price for two load balanced web servers but I clearly didn't need the extra capacity that they would provide.

At this time the site also was powered by a Ruby with Sinatra stack. In reality this was only to power the contact forum and nothing else.

I wanted to add a blog to this site as explained in [Blogging My Freelance Journey]({{ site.url }}/2015/03/blogging-my-freelance-journey/) so I switched my site from Ruby to PHP so that I could more easily integrate WordPress into a `/blog` sub-directory.

Now I needed a MySQL database to store the WordPress content and Heroku was only going to charge me more for the most basic functionality.

To get around the expensive hosting I made a list of the items that I wanted from my site:

1. host some of my projects (or links to them as complex projects would most likely be on their own domain)
2. host a simple, static blog as the comments could be carried out over [Twitter](http://www.twitter.com/BowerRhys). [Disqus](https://disqus.com/) is also a very popular commenting system for static websites and is an option to add comments to this site in the future.

It was clear that all I needed was a static site. I knew that I needed a generator to include a standard header and footer on every page. [Jekyll](http://jekyllrb.com/) is a simple, blog-aware, static site generator and is quite popular right now. It has the added bonus of automatic compilation on [GitHub Pages](https://pages.github.com/). Although I can no longer take advantage of this because of the tag plugin I use.

**GitHub Pages to the Rescue**

Because my site was already version controlled in [Git](http://git-scm.com/) GitHub Pages was a logical service provider for my static site (plus it's free).

After moving my site to Jekyll and GitHub Pages the speed increased greatly because of two reasons:

1. GitHub has fast servers that don't sleep (this is the majority of the speed up)
2. My site no longer needed to be compiled on every page load (this is a small factor)

At this point I introduced [Gulp](http://gulpjs.com/) to build the site. With Gulp I automated concatenation of the CSS and javascript (which I wasn't doing before) and optimized images for the web. All together I was able to reduce the number of HTTP requests from 31 to 22 and the page size from 4.2 MB to 2.7 MB.

I should also mention that the size of the downloaded CSS was significantly reduced due to compiling Bootstrap from source and omitting the unused components but is a small factor compared to the image optimization.

With these changes I finally achieved sub two second response times. Still slow but much better than where I started.  

<a href="{{ site.url }}/img/posts/fixed-fourteen-second-load/fast-waterfall.png"><img class="img-responsive" src="{{ site.url }}/img/posts/fixed-fourteen-second-load/fast-waterfall.png" alt="Two second, 22 HTTP request waterfall"/></a>

**What's next?**

There is still work to be done but I am more comfortable with the performance now than a week ago. Some things that I am considering are minifying the HTML and inlining the Google Analytics javascript to remove the need for the additional HTTP request as the only page that requires additional javascipt is the [portfolio]() page.

I have heard good things about [CloudFlare](http://www.cloudflare.com/) and will have to check them out. It will add another layer to the stack which I don't really want to do especially because CDNs can be unpredictable as to when they update the cache of your content.

**Final Thoughts**

Heroku is a great platform and is very easy to use however it gets very expensive very quickly. Check it out only for production apps that need to run server side code.

I had to make some compromises with the new site specifically with the no comments nature of a static site and restricting my ability to run server side code. Hopefully the fourteen to two second load time and 31 to 22 HTTP request reductions will justify the compromises that were made.