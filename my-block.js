wp.blocks.registerBlockType('brad/border-box', {
  title: 'Name Email Input',
  icon: 'smiley',
  category: 'common',
  attributes: {
    content: {type: 'string'},
    color: {type: 'string'}
  },
  edit: function(props) {
    function updateContent(event) {
      props.setAttributes({content: event.target.value})
    }

    function updateColor(value) {
      props.setAttributes({color: value.hex})
    }

    return wp.element.createElement(
      "div",
      null,
      wp.element.createElement(
        "h4",
        null,
        "Insert Form Title"
      ),
      wp.element.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent })
      /*wp.element.createElement(wp.components.ColorPicker, { color: props.attributes.color, onChangeComplete: updateColor })*/
    );
  },
  save: function(props) {
	  
	  
	  
	   return wp.element.createElement(
	   "form",
      { action: "", target:"_blank", method:"POST"},
	   wp.element.createElement(
        "h4",
        null,
         props.attributes.content
      ),
    wp.element.createElement(
      "input",
      { type: "text",  placeholder:"enter name", name:"entername"}
      
    ),
	wp.element.createElement(
      "input",
      { type: "email",  placeholder:"enter email", name:"enteremail" }
      
    ),
	wp.element.createElement(
      "input",
      { name:"submit", type: "submit",  value:"Submit"}
      
    )
	);
  }
})
