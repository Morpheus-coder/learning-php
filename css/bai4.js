alert("Hello World");
function vonglap(i) {
  for (i = 1; i <= 10; i++) {
    if (i % 2 === 0) {
      continue;
    }
    console.log(i);
  }
}
vonglap();
let Hoten = [
  "Nguyễn Văn Minh",
  "Nguyễn Hoàng Hiệp",
  "Nguyễn Anh Tuấn",
  "Hồ Minh Nhật",
  "Nhữ Tùng Lâm",
];
function print(i) {
  for (i = 0; i < Hoten.length; i++) {
    console.log(Hoten[i]);
  }
}
print();
let person = {
  name: "Nam",
  age: 25,
  job: "Developer",
};

for (let key in person) {
  console.log(key + ": " + person[key]);
}
function add(a, b) {
  return a + b;
}
console.log(add(5, 3));
var multiply = function (a, b) {
  return a + b;
};
console.log(multiply(5, 3));
let cong = (a, b) => a + b;
console.log(cong(5, 4));
function process(x, callback) {
  console.log("Giá trị" + x);
  callback();
}
function done() {
  console.log("Xử lý xong!");
}
function factorial(n) {
  if (n === 0) return 1;
  return n * factorial(n - 1);
}
console.log(factorial(5));
let score = 85;
function ketqua() {
  if (score >= 90) {
    console.log("Xếp loại A");
  } else if (score >= 75) {
    console.log("Xếp loại B");
  } else {
    console.log("Xếp loại C");
  }
}
ketqua();

let day = 3;
function ngay() {
  switch (day) {
    case 1:
      console.log("Chủ nhật");
      break;
    case 2:
      console.log("Thứ Hai");
      break;
    case 3:
      console.log("Thứ Ba");
      break;
    case 4:
      console.log("Thứ Tư");
      break;
    default:
      console.log("Không hợp lệ");
  }
}
ngay();

let j = 1;
function lap() {
  while (j <= 5) {
    console.log(j);
    j++;
  }
}
lap(j);
