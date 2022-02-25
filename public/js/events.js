$(".confirmDelete").click((e) => {
  return confirm("Are you sure you want to delete this?");
});

function calculatePrice() {
  let priceValue = 0;
  const adults = Math.abs(Math.ceil($("#adults").val() || 0));
  const children = Math.abs(Math.ceil($("#children").val() || 0));
  const price = $("input[name='plan']:checked").data("price") || 0;
  if (adults) priceValue += adults * price;
  if (children) priceValue += (children / 2) * price;
  if (priceValue < 0) priceValue *= -1;
  $("#price").val(priceValue);
  $("#adults").val(adults || 0);
  $("#children").val(children || 0);
}