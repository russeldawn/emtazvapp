export default {
	layoutMenu: [
		{ label: 'Dashboard', icon: 'pie-chart', route: 'dashboard' },
		{ label: 'User', icon: 'user', route: 'users' },
		{
			label: 'Zoning', icon: 'environment', sub_route: [
				{ label: 'Add / Modify', icon: 'environment', route: 'add_zoning' },
				{ label: 'Endorse', icon: 'environment', route: 'endorse_zoning' },
				{ label: 'Approve', icon: 'environment', route: 'approve_zoning' },
			]
		},
		{ label: 'Land Use', icon: 'compass', route: 'land_use' },
		{
			label: 'Business', icon: 'bank', sub_route: [
				{ label: 'Add / Modify', icon: 'bank', route: 'add_business' },
				{ label: 'Approve', icon: 'bank', route: 'approve_business' },
			]
		},
		{ label: 'Payment', icon: 'dollar', route: 'payment' },
	]
}
