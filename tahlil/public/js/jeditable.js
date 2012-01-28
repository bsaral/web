$(function() {	
	    $("#select").editable("php/resimgoster.php", {
        type      : "select",
        data      : "{'a':'Resim Yükle','b':'Hasta bir','c':'Hasta iki','d':'Örnek Resim','e':'Deneme Resim'}",
        tooltip   : "Dosya Yükleme İçin Çift Tıklayınız.",
        submit    : "OK",
        event     : "dblclick"
    });
	
	
	$(".baslik").editable("php/guncelle.php", { 
		indicator : "İşleminiz Gerçekleşiyor...",
		type   : 'checkbox',
		submitdata: { _method: "put" },
		select : true,
		submit : 'Kaydet',
		cancel : 'İptal',
		cssclass : "editable"
	});

		
	$(".click").editable("php/maddebir.php", { 
		indicator : "<img src='/a/public/img/jeditable_yukle.gif'>",
		tooltip   : "Düzeltmek için tek tıklayınız...",
		submit : 'Kaydet',
		cancel : 'İptal',
		style  : "inherit"
	});

	$(".dblclick").editable("php/maddeiki.php", { 
		indicator : "<img src='/a/public/img/jeditable_yukle.gif'>",
		tooltip   : "Düzeltmek için çift tıklayınız...",
		event     : "dblclick",
		submit : 'Kaydet',
		cancel : 'İptal',
		style  : "inherit"
	});

	$(".mouseover").editable("php/maddeuc.php", { 
		indicator : "<img src='/a/public/img/jeditable_yukle.gif'>",
		event     : "mouseover",
		submit : 'Kaydet',
		cancel : 'İptal',
		style  : "inherit"
	});
});
