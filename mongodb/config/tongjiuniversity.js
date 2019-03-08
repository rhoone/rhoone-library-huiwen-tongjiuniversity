db.createUser({
	user: "owner",
	pwd:  "123456",
	roles: [{
		role: "dbOwner", db: "tongjiuniversity"
	}]
});

db.downloaded_content.createIndex({"marc_no": 1}, {name: "marc_no_unique_asc", unique: true});
db.downloaded_content.createIndex({"created_at": 1}, {name: "created_at_asc"});
db.downloaded_content.createIndex({"updated_at": 1}, {name: "updated_at_asc"});
