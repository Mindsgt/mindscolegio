$('.dropdown').mouseleave(function(){ $(this).removeClass('open'); });

function buttonsTable(show,edit,deleted,editView=false){	
	btn = '<div class="hidden-sm hidden-xs action-buttons">';
	if (show!=''){
		btnShow="href='"+show+"'";
		btn += "<a class='blue' "+btnShow+" href='#' target='_blank'>";
    	btn += '<i class="ace-icon fa fa-search-plus bigger-130"></i></a>&nbsp;&nbsp;';
	}	
	if (edit!=''){
		if (editView){
			btnEdit="href='"+edit+"'";
		}else{
			btnEdit="onclick='#'";
		}
		btn += '<a class="green" '+btnEdit+' href="#">';
    	btn += '<i class="fas fa-pencil-alt bigger-130"></i></a>&nbsp;&nbsp;';
	}    
    if (deleted!=''){
    	btnDelete="onclick='destroy(\""+deleted+"\")'";
    	btn += '<a class="red" '+btnDelete+' href="#">';
    	btn += '<i class="ace-icon fa fa-trash-o bigger-130"></i></a>';
    }   
    btn += '</div><div class="hidden-md hidden-lg"><div class="inline pos-rel">';
    btn += '<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">';
    btn += '<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i></button>';
    btn += '<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">';
    if (show!=''){
    	btn += '<li><a href="#" class="tooltip-info" data-rel="tooltip" title="View" '+btnShow+'>';
    	btn += '<span class="blue"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>';
	}	
	if (edit!=''){
		btn += '<li><a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" '+btnEdit+'>';
    	btn += '<span class="green"><i class="ace-icon fa fa-search-plus bigger-120"></i></span></a></li>';
	}    
    if (deleted!=''){
    	btn += '<li><a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" '+btnDelete+'>';
    	btn += '<span class="red"><i class="ace-icon fa fa-trash-o bigger-120"></i></span></a></li>';
    }
    btn += '</ul></div></div>';
    return btn;    
}
