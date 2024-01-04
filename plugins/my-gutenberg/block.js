( function( blocks, editor, element ) {
	var el = element.createElement;
	var RichText = editor.RichText;

	blocks.registerBlockType( 'my-gutenberg/policy-heading', {
		title: 'ポリシー見出し',
		icon: 'heading',
		category: 'common',
		attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'h2',
			},
		},
		edit: function( props ) {
			var content = props.attributes.content;
			function onChangeContent( newContent ) {
				props.setAttributes( { content: newContent } );
			}

			return el(
				RichText,
				{
					tagName: 'h2',
					className: 'wp-policy-heading',
					onChange: onChangeContent,
					value: content,
				}
			);
		},
		save: function( props ) {
			return el(
				RichText.Content, 
				{
					tagName: 'h2',
					className: 'wp-policy-heading',
					value: props.attributes.content,
				} 
			);
		},
	} );
}(
	window.wp.blocks,
	window.wp.editor,
	window.wp.element
) );