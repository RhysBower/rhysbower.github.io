require 'rubygems'
require 'bundler'
require 'pony'

Bundler.require

require './app.rb'
run Sinatra::Application