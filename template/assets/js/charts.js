const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
  type: "doughnut",
  data: {
    labels: ["Potraviny", "Eat-out", "Doprava", "Dárky", "Výlety", "Zábava", "Amway", "Oblečení", "Osobní růst", "Bydlení", "Ostatní"],
    datasets: [
      {
        data: [3657, 946, 581, 2500, 4853, 159, 6101, 8521, 1818, 12470, 5950],
        backgroundColor: [
          "#F94144",
          "#F3722C",
          "#F8961E",
          "#F9844A",
          "#F9C74F",
          "#90BE6D",
          "#43AA8B",
          "#4D908E",
          "#577590",
          "#277DA1",
          "#228BB8"
        ],
        borderColor: [
          "#FFFFFF"
        ],
        borderWidth: 2,
      },
    ],
  },
});
