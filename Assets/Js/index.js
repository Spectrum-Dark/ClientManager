document.addEventListener("DOMContentLoaded", function () {
  const startDateInput = document.getElementById("start_date");
  const startMonthInput = document.getElementById("start_month");
  const endDateInput = document.getElementById("end_date");
  const endMonthInput = document.getElementById("end_month");

  // Mapeo de meses
  const monthNames = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
  ];

  // Evento para calcular el mes y fecha de fin
  startDateInput.addEventListener("change", function () {
    const startDateValue = new Date(startDateInput.value);

    if (!isNaN(startDateValue)) {
      // Actualizar el mes de inicio
      const startMonth = monthNames[startDateValue.getMonth()];
      startMonthInput.value = startMonth;

      // Calcular la fecha de fin sumando 31 días
      const endDate = new Date(startDateValue);
      endDate.setDate(endDate.getDate() + 31);

      // Formatear la fecha de fin
      const endDateFormatted = endDate.toISOString().split("T")[0];
      endDateInput.value = endDateFormatted;

      // Actualizar el mes de fin
      const endMonth = monthNames[endDate.getMonth()];
      endMonthInput.value = endMonth;
    } else {
      // Limpiar los campos si la fecha es inválida
      startMonthInput.value = "";
      endDateInput.value = "";
      endMonthInput.value = "";
    }
  });
});