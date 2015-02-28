get "/" do
  erb :index
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