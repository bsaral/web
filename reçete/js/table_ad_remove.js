function addRow(tableName) {
	var eNofBs = document.getElementById('nofbs');
	var nons = parseInt(eNofBs.value) + 1;
	eNofBs.setAttribute('value', nons);

	var table = document.getElementsByName(tableName).item(0);
	//var table = document.getElementByID(tableName);

	var rowCount = table.rows.length;

	// chk + textarea
	var row1 = table.insertRow(rowCount);

	var cell11 = row1.insertCell(0);
	var chk = document.createElement("input");
	cell11.setAttribute('class', 'label');
	chk.type = "checkbox";
	cell11.appendChild(chk);
	cell11.appendChild(document.createTextNode('Dal'));

	var cell12 = row1.insertCell(1);
	var txtarea = document.createElement("textarea");
	var txtOdul = document.createElement('input');
	var txtCeza = document.createElement('input');
	var chkResponse = document.createElement('input');
	var txtresponse = document.createElement('input');
	cell12.setAttribute('class', 'field');
	cell12.setAttribute('id', 'dal' + nons + 'field');

	txtarea.setAttribute('name', 'link_text[]');
	cell12.appendChild(txtarea);
	cell12.appendChild(document.createElement('br'));

	txtOdul.setAttribute('type', 'input');
	txtOdul.setAttribute('name', 'odul[]');
	txtOdul.setAttribute('maxlength', '3');
	txtOdul.setAttribute('size', '3');
	cell12.appendChild(document.createTextNode('Ödül:'));
	cell12.appendChild(txtOdul);

	txtCeza.setAttribute('type', 'input');
	txtCeza.setAttribute('name', 'ceza[]');
	txtCeza.setAttribute('maxlength', '3');
	txtCeza.setAttribute('size', '3');
	cell12.appendChild(document.createTextNode('Ceza:'));
	cell12.appendChild(txtCeza);

	chkResponse.setAttribute('type', 'checkbox');
	chkResponse.setAttribute('name', 'chkResponse[]');
	chkResponse.setAttribute('id',   'chkResponse' + nons);
	chkResponse.setAttribute('value', nons);
	chkResponse.setAttribute('onclick', "toggle(this, 'response" + nons + "')");
	cell12.appendChild(chkResponse);
	cell12.appendChild(document.createTextNode('Kullanıcı girdisi istiyor musun?'));
	cell12.appendChild(document.createElement('br'));

	txtresponse.setAttribute('type', 'text');
	txtresponse.setAttribute('name', 'response[]');
	txtresponse.setAttribute('id',   'response' + nons);
	txtresponse.setAttribute('style', 'visibility:visible;');
	cell12.appendChild(txtresponse);

	// select
	var row2 = table.insertRow(rowCount+1);
	
	var cell21 = row2.insertCell(0);
	var im = document.createElement('img');
	cell21.setAttribute('class', 'label');
	im.setAttribute('src', '/public/img/icon/32x32/comments.png');
	im.setAttribute('width', '25');
	cell21.appendChild(im);

	var cell22 = row2.insertCell(1);
	var slct = document.getElementsByName("node_link[]").item(0).cloneNode(true);
	var btn = document.createElement('input');

	var cid = document.getElementById('cid').getAttribute('value');
	var id = document.getElementById('id').getAttribute('value');

	cell22.setAttribute('class', 'select');

	slct.setAttribute('id', 'select' + nons);
	cell22.appendChild(slct); 

	btn.setAttribute('type', 'button');
	btn.setAttribute('value', 'Yeni Düğüm');
	btn.setAttribute('class', 'small button');
	//btn.setAttribute('onclick', "javascript:addNewListItem('select" + nons + "', " + cid + ");");
	btn.setAttribute('onclick', "Boxy.ask('Düğüm türü hangisi olsun?', {'dal':'Normal', 'drug':'İlaç Seçim', 'exam':'Tahlil', 'bmap':'Vücut Haritası', 'immap':'Resim Haritası', 'report':'Rapor'}, function(r) { addNewNode('select" + nons + "', " + cid + ", r, " + id + "); }, {title:'Yeni Düğüm Ekleme'});");
	cell22.appendChild(btn); 
}

function deleteRow(tableName) {
    try {
    var table = document.getElementsByName(tableName).item(0);
    //var table = document.getElementByID(tableName);
    var rowCount = table.rows.length;

    for(var i=0; i<rowCount; i++) {
	var row = table.rows[i];
	var chkbox = row.cells[0].childNodes[0];
	if(null != chkbox && true == chkbox.checked) {
	    table.deleteRow(i);
	    table.deleteRow(i);
	    rowCount--;
	    rowCount--;
	    i--;
	    i--;
	}

    }
    }catch(e) {
	alert(e);
    }
}

