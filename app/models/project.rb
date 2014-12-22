class Project < ActiveRecord::Base
	  mount_uploader :image, ImageUploader
	  mount_uploader :pdf, PdfUploader
	  belongs_to :user
end
