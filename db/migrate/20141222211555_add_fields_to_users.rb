class AddFieldsToUsers < ActiveRecord::Migration
  def change
  	 add_column :users, :first_name, :string
     add_column :users, :last_name, :string
     add_column :users, :about, :string
     add_column :users, :avatar, :string
  end
end
