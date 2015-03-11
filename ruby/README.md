# My Portfolio Site

Most of the code in this project is to get it to run on Heroku

## Putting it up on Heroku

Deploy to Heroku by clicking this button.

## Running it locally

```
$ git clone git://github.com/RhysBower/portfolio.git
$ gem install bundler
$ bundle
$ bundle exec foreman start
```

Navigate to localhost:5000 | 5100

## Add Coffeescript and Sass (Optional)

Add the gems to the Gemfile just below sinatra:

```
gem 'sinatra'
gem 'coffee-script'
gem 'sass'
```

Run bundler:

```
$ bundle
```

Create directories for your assets:

```
$ mkdir views views/javascripts views/stylesheets
```

Require and assign the processors to your asset directories:

```
require 'coffee-script'
require 'sass'

get '/javascripts/:script.js' do |script|
  coffee :"javascripts/#{script}"
end

get '/stylesheets/:stylesheet.css' do |stylesheet|
  scss :"stylesheets/#{stylesheet}"
end
```

Restart your app and use your asset directories as normal.