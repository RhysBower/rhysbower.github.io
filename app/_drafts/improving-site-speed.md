---
layout: post
title: How I Improved this Site's Speed
published:   2015-03-24 09:00:00 -0700
modified: 2015-03-24 09:00:00 -0700
tags: [web, performance]
excerpt: >
  
---
When my portfolio initially went online it was hosted with [Heroku](www.heroku.com) on their free tier. This was great.  It was fast and easy to deploy with git but only after the server warmed up.

I noticed that some page loads were taking over fourteen seconds and 31 requests to download all of the content for that page. This is unacceptable and I knew it had to be fix, fast.