db.createUser({
	user: "owner",
	pwd:  "123456",
	roles: [{
		role: "dbOwner", db: "tongjiuniversity"
	}]
});