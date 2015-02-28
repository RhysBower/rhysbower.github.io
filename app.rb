get "/" do
  erb :index
end

post "/mail" do
  begin
    Pony.mail({
      to: "bowerrhys@gmail.com",
      from: params[:email],
      subject: "Inquiry from #{params[:name]}",
      body: params[:message],
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