require 'sinatra'

class App < Sinatra::Base
	get "/" do
		erb :'index.html'
	end
end