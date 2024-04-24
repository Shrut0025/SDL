sudo apt-get install ruby-full
sudo apt-get update -y
sudo apt-get install -y ruby-sinatra


#function to accept input from user
def get_name
print "Enter your first name : "
first_name = gets.chomp
print "Enter your last name : "
last_name = gets.chomp
return first_name , last_name
end

#main program
def main
first_name , last_name = get_name
#print names in reverse order
puts "#{last_name} #{first_name}"
end

#call main function
main