db.createUser({
	user: "owner",
	pwd:  "123456",
	roles: [{
		role: "dbOwner", db: "tongjiuniversity"
	}]
});

db.downloaded_content.createIndex({"marc_no": 1}, {name: "marc_no_unique_asc", unique: true})
