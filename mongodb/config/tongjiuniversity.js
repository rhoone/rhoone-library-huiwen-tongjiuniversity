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

db.marc_no.createIndex({"marc_no": 1}, {name: "marc_no_unique_asc", unique: true});
db.marc_no.createIndex({"empty": 1}, {name: "empty_asc"});
db.marc_no.createIndex({"error_downloading": 1}, {name: "error_downloading_asc"});
db.marc_no.createIndex({"reason_downloading": 1}, {name: "reason_downloading_asc"});
db.marc_no.createIndex({"error_analyzing": 1}, {name: "error_analyzing_asc"});
db.marc_no.createIndex({"reason_analyzing": 1}, {name: "reason_analyzing_asc"});
db.marc_no.createIndex({"error_indexing": 1}, {name: "error_indexing_asc"});
db.marc_no.createIndex({"reason_indexing": 1}, {name: "reason_indexing_asc"});
db.marc_no.createIndex({"created_at": 1}, {name: "created_at_asc"});
db.marc_no.createIndex({"updated_at": 1}, {name: "updated_at_asc"});

db.marc_info.createIndex({"marc_no": 1}, {name: "marc_no_asc"});
db.marc_info.createIndex({"marc_no": 1, "key": 1, "value": 1}, {name: "marc_key_value_unique_asc", unique: true});
db.marc_info.createIndex({"key": 1}, {name: "key_asc"});
db.marc_info.createIndex({"value": 1}, {name: "value_asc"});
db.marc_info.createIndex({"key": 1, "value": 1}, {name: "key_value_asc"});
db.marc_info.createIndex({"created_at": 1}, {name: "created_at_asc"});
db.marc_info.createIndex({"updated_at": 1}, {name: "updated_at_asc"});

db.marc_copy.createIndex({"marc_no": 1}, {name: "marc_no_asc"});
db.marc_copy.createIndex({"marc_no": 1, "call_no": 1, "barcode": 1}, {name: "marc_call_barcode_unique_asc", unique: true});
db.marc_copy.createIndex({"call_no": 1}, {name: "call_no_asc"});
db.marc_copy.createIndex({"barcode": 1}, {name: "barcode_asc"});
db.marc_copy.createIndex({"volume_period": 1}, {name: "volume_period_asc"});
db.marc_copy.createIndex({"position": 1}, {name, "position_asc"});
db.marc_copy.createIndex({"status": 1}, {name: "status_asc"});
db.marc_copy.createIndex({"created_at": 1}, {name: "created_at_asc"});
db.marc_copy.createIndex({"updated_at": 1}, {name: "updated_at_asc"});
