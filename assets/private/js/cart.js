(function ($) {
  "use strict";
  $(".year").prop("disabled", true);
  $(".year").prop("disabled", false);
  $(".y").change(function () {
    $(".year").click(function () {
      sessionStorage.setItem("year", $(".y option:selected").val());
      location.reload();
    });
  });

  let date = new Date();
  let newYear = date.getFullYear();
  if (sessionStorage.getItem("year")) {
    newYear = sessionStorage.getItem("year");
  }
  $.ajax({
    type: "GET",
    url: $(document.body).data("base") + "chart/" + newYear,
    success: function (res) {
      $(".class_year").html("Total IP " + newYear);
      let result = res.results;
      var $chart = $("#chart-bars");
      function initChart($chart) {
        var ordersChart = new Chart($chart, {
          type: "line",
          data: {
            labels: result.month,
            datasets: [
              {
                label: "Result",
                data: result.datasets.data,
              },
            ],
          },
        });
        $chart.data("chart", ordersChart);
      }
      if ($chart.length) {
        initChart($chart);
      }
    },
  });
})(jQuery);
