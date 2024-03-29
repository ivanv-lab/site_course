	$.fbuilder.typeList.push(
		{
			id:"fCommentArea",
			name:"Instruct. Text",
			control_category:1
		}
	);
	$.fbuilder.controls[ 'fCommentArea' ]=function(){};
	$.extend(
		$.fbuilder.controls[ 'fCommentArea' ].prototype,
		$.fbuilder.controls[ 'ffields' ].prototype,
		{
			title:"Comments here",
			ftype:"fCommentArea",
			userhelp:"A description of the section goes here.",
			display:function()
				{
					return '<div class="fields '+this.name+' '+this.ftype+'" id="field'+this.form_identifier+'-'+this.index+'" title="'+this.controlLabel('Instruct. Text')+'"><div class="arrow ui-icon ui-icon-grip-dotted-vertical "></div><div title="Delete" class="remove ui-icon ui-icon-trash "></div><div title="Duplicate" class="copy ui-icon ui-icon-copy "></div><label>'+this.title+'</label><span class="uh">'+this.userhelp+'</span><div class="clearer" /></div>';
				},
			editItemEvents:function()
				{
					$.fbuilder.controls[ 'ffields' ].prototype.editItemEvents.call(this);
				}
	});