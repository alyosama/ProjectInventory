json.array!(@projects) do |project|
  json.extract! project, :id, :name, :abstract, :description
  json.url project_url(project, format: :json)
end
