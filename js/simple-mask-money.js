let input = SimpleMaskMoney.setMask('#precio',{
prefix: '$',
suffix: '',
fixed: true,
fractionDigits: 0,
decimalSeparator: '.',
thousandsSeparator: ',',
emptyOrInvalid: () => {
  return this.SimpleMaskMoney.args.fixed
    ? `0${this.SimpleMaskMoney.args.decimalSeparator}00`
    : `_${this.SimpleMaskMoney.args.decimalSeparator}__`;
}
});
