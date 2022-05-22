// let unit = [
// 	"Fakultas KIP",
// 	"Fakultas Pertanian",
// 	"Fakultas Kedokteran",
// 	"Fakultas MIPA",
// 	"Fakultas Ekonomi dan Bisnis",
// 	"Fakultas Hukum",
// 	"Fakultas Ilmu Sosial dan Politik",
// 	"Fakultas Ilmu Budaya",
// 	"Fakultas Keolahragaan",
// 	"Fakultas Teknik",
// 	"Fakultas Seni Rupa dan Desain",
// 	"Sekolah Vokasi",
// 	"Sekolah Pascasarjana",
// 	"Kantor Pusat",
// 	"Rumah Sakit",
// ];

// unit.forEach((item) =>
// 	console.log(
// 		`<option value="${item}"  {{ isSelectedValue($pegawai->unit, '${item}') }}>${item}</option>`
// 	)
// );

// let status_pegawai = [
// 	"Purna Tugas",
// 	"PNS",
// 	"Kontrak Professional",
// 	"Non PNS",
// 	"CPNS",
// 	"Calon Non PNS",
// ];

// status_pegawai.forEach((item) =>
// 	console.log(
// 		`<option value="${item}" {{ isSelectedValue($pegawai->status_pegawai, '${item}') }}>${item}</option>`
// 	)
// );

const moment = require('../../public/design/js/moment.min.js');
const nip = require('./data_pegawai.json').map(item => parseInt(item.nip.slice(0,8)));
var todayDate = new Date().toISOString().slice(0, 10);
console.log(nip[0]);
console.log(moment().format('YYYYMMDD'));
