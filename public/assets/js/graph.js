/*Graph*/
var graph;
var xPadding = 30;
var yPadding = 30;
var data = {
  values: [{
      X: "Jan",
      Y: 40
  }, {
      X: "Feb",
      Y: 28
  }, {
      X: "Mar",
      Y: 22
  }, {
      X: "Apr",
      Y: 33
  }, {
      X: "May",
      Y: 10
  }, {
      X: "Jun",
      Y: 30
  }, ]
};
// Returns the max Y value in our data list
function getMaxY() {
  var max = 0;
  for (var i = 0; i < data.values.length; i++) {
      if (data.values[i].Y > max) {
      max = data.values[i].Y;
      }
  }
  max += 10 - max % 10;
  return max;
}
// Return the x pixel for a graph point
function getXPixel(val) {
  return ((graph.width() - xPadding) / data.values.length) * val + (xPadding * 1.5);
}
// Return the y pixel for a graph point
function getYPixel(val) {
  return graph.height() - (((graph.height() - yPadding) / getMaxY()) * val) - yPadding;
}
$(function () {
    graph = $('#graph');
    var c = graph[0].getContext('2d');
    c.lineWidth = 2;
    c.strokeStyle = '#FFF';
    c.font = '13pt sans-serif';
    c.textAlign = "center";
    c.fillStyle = '#FFF';
    // Draw the axises
    c.beginPath();
    c.moveTo(xPadding, 0);
    c.lineTo(xPadding, graph.height() - yPadding);
    c.lineTo(graph.width(), graph.height() - yPadding);
    c.stroke();
    // Draw the X value texts
    for (var i = 0; i < data.values.length; i++) {
        c.fillText(data.values[i].X, getXPixel(i), graph.height() - yPadding + 20);
    }
    // Draw the Y value texts
    c.textAlign = "right"
    c.textBaseline = "middle";
    for (var i = 0; i < getMaxY(); i += 10) {
        c.fillText(i, xPadding - 10, getYPixel(i));
    }
    c.strokeStyle = '#00FFFF';
    c.lineWidth = 2;
    // Draw the line graph
    c.beginPath();
    c.moveTo(getXPixel(0), getYPixel(data.values[0].Y));
    for (var i = 1; i < data.values.length; i++) {
        c.lineTo(getXPixel(i), getYPixel(data.values[i].Y));
    }
    c.stroke();
    // Draw the dots
    c.fillStyle = '#00FFFF';
    for (var i = 0; i < data.values.length; i++) {
        c.beginPath();
        c.arc(getXPixel(i), getYPixel(data.values[i].Y), 4, 0, Math.PI * 2, true);
        c.fill();
    }
});

/*Chart*/
$('.percentage').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#FF3000',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
$('.percentage-two').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#9600FF',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
$('.percentage-three').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#22C35D',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
$('.percentage-four').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#FF8300',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
$('.percentage-five').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#00FFFF',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});
$('.percentage-six').easyPieChart({
  animate: 1000,
  trackColor: '#F4F4F4',
  barColor: '#FFEA00',
  scaleColor: 'transparent',
  size: 107,
  lineWidth: 6,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  },
  onStop: function(value, to) {
    this.$el.find('span').text(Math.round(to));
  }
});