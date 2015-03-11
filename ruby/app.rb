require 'rubygems'
require 'bundler'
require 'sinatra'
require 'pony'

get "/" do
  @page = "/"
  erb :index, layout: :default
end

get "/games/UfoRide" do
  @page = "/games/UfoRide"
  erb :uforide, layout: :default
end
get "/games/UfoRide2" do
  @page = "/games/UfoRide2"
  erb :uforide2, layout: :default
end
get "/games/TheUnbeatableTest" do
  @page = "/games/TheUnbeatableTest"
  erb :theunbeatabletest, layout: :default
end
get "/games/FluffyBall" do
  @page = "/games/FluffyBall"
  erb :fluffyball, layout: :default
end

get "/blog" do
  erb :"blog/list", layout: :default
end

not_found do
  redirect "/"
end

post "/mail" do
  begin

    body = "Hello from #{params[:name]}. You can contact me at #{params[:email]} and #{params[:phone]}. \n\n #{params[:message]}"

    Pony.mail({
      to: "bowerrhys@gmail.com",
      from: params[:email],
      subject: "Inquiry from #{params[:name]}",
      body: body,
      via: :smtp,
      via_options: {
        address: "smtp.gmail.com",
        port: "587",
        enable_starttls_auto: true,
        user_name: "answerawesome",
        password: "Sup3r$ecret",
        authentication: :plain,
        domain: "localhost"
      }
    })

  rescue
    return "false"
  end
  return "true"
end