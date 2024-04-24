sudo apt-get install ruby-full
sudo apt-get update -y
sudo apt-get install -y ruby-sinatra


require 'mail'

# Set up SMTP settings
Mail.defaults do
  delivery_method :smtp, {
    :address => 'smtp.gmail.com',
    :port => 587,
    :user_name => 'vidyeshgdhande1111@gmail.com',
    :password => 'uazm bnfv htxw oeta ',
    :authentication => :login,
    :enable_starttls_auto => true
  }
end

# Define email message
message = Mail.new do
  from 'vidyeshgdhande1111@gmail.com'
  to 'baravkarshruti@gmail.com'
  subject 'Hello from Ruby!'
  body 'This is a test email sent from Ruby.'
end

# Send email
message.deliver!
puts "Mail sent!"