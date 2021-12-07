console.log('Loading')
let myChart;
const loadData = () => {
    const data = JSON.parse(formatData);
    let years = [];
    let datas = [];

    for (let i = 0; i < 5; i++) {

        let year = data.Series[0].OBSERVATIONS[i].TIME_PERIOD
        years.push(year)
    }
    for (let i = 0; i < 5; i++) {

        let cant = data.Series[0].OBSERVATIONS[i].OBS_VALUE
        datas.push(cant)
    }

    let ctx = document.getElementById("Mychart").getContext("2d");

    myChart = new Chart(ctx, {
        type: 'bar', data: {
            labels: years, datasets: [{
                label: label || 'Datos',
                data: datas,
                backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)', 'rgba(255, 159, 64, 0.5)'],
            }]

        }
    })
}
const graph = () => {
    let filterBtn = document.querySelector('#filter');
    filterBtn.addEventListener('click', () => {
    });

}
if (myChart) {
    myChart.destroy()
}

loadData()

graph();


