var options = {
    chart: {
        height: 320,
        type: "donut"
    },
    series: chartData.series,
    labels: chartData.labels,
    colors: ["#34c38f", "#f46a6a"], // Vert pour actif et rouge pour banni
    legend: {
        show: true,
        position: "bottom",
        horizontalAlign: "center",
        verticalAlign: "middle",
        floating: false,
        fontSize: "14px",
        offsetX: 0
    },
    stroke: {
        colors: ["transparent"]
    },
    responsive: [{
        breakpoint: 600,
        options: {
            chart: {
                height: 240
            },
            legend: {
                show: false
            }
        }
    }]
};

// Initialiser le graphique
var chart = new ApexCharts(document.querySelector("#donut_chart"), options);
chart.render();
