console.log("admin_pages.js loaded");

const myChartElement = document.getElementById("myChart");

if (myChartElement) {
    new Chart(myChartElement, {
        type: "line",
        data: {
            labels: ["Sep", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"],
            datasets: [
                {
                    label: "Dataset 1",
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330],
                    borderColor: "red",
                    fill: false
                },
                {
                    label: "Dataset 2",
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000],
                    borderColor: "green",
                    fill: false
                },
                {
                    label: "Dataset 3",
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000],
                    borderColor: "blue",
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: { display: true }
            }
        }
    });
}
document.addEventListener("DOMContentLoaded", function () {
    // Sales & Purchase Chart
    const salesPurchaseCtx = document.getElementById('salesPurchaseChart').getContext('2d');
    new Chart(salesPurchaseCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Sales',
                data: [12, 19, 3, 5, 2, 3],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
            }, {
                label: 'Purchase',
                data: [7, 11, 5, 8, 3, 7],
                borderColor: 'rgba(153, 102, 255, 1)',
                backgroundColor: 'rgba(153, 102, 255, 0.2)',
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            }
        }
    });

    // Order Summary Chart
    const orderSummaryCtx = document.getElementById('orderSummaryChart').getContext('2d');
    new Chart(orderSummaryCtx, {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'Pending', 'Canceled'],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: ['#4CAF50', '#FFC107', '#F44336'],
                hoverBackgroundColor: ['#66BB6A', '#FFD54F', '#EF5350']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',
                },
            }
        }
    });
});
