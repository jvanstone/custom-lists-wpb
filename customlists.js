wp.domReady(() => {
	wp.blocks.unregisterBlockStyle(
		'core/list',
		[ 'default' ]
	);

	wp.blocks.registerBlockStyle(
		'core/list',
		[
			{
				name: 'disc',
				label: 'Disc',
				isDefault: true,
			},
			{
				name: 'checkmark',
				label: 'Checkmark',
			},
			{
				name: 'cirlce',
				label: 'Circle',
			},
			{
				name: 'smallbox-open',
				label: 'Small Box Open',
			},
			{	
				name: 'box',
				label: 'Box',
			}
		]
	);
} );