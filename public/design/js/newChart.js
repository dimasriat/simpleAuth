function newChart(canvasId, title, xGroup, xEachGroupWithLabel) {
	const bgColor = ["#e8dc2e", "#2ee878", "#2e53e8", "#722ee8", "#e82ed2", "#ed1a59", "#d35400"];
	return new Chart(document.getElementById(canvasId).getContext('2d'), {
		type: 'bar',
		data: {
			labels: xGroup,
			datasets: xEachGroupWithLabel.map(
				(item,i) => ({...item, backgroundColor:bgColor[i]})
			),
		},
		options: {
			responsive: true,
			interaction: {
			mode: 'index',
			intersect: false,
			},
			stacked: false,
			plugins: {
			title: {
				display: true,
				text: title
			}
			},
			scales: {
				jumlah: {
					type: 'linear',
					display: true,
					position: 'left',
				},
			}
		},
	});
}