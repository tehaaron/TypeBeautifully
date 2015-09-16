var Person = Backbone.Model.extend({
  defaults: {
    name: 'John Doe',
    age: 30,
    occupation: 'worker',
  },
  validate: function(attrs) {
  	if ( attrs.age < 0 ) {
  		return 'Age must be positive, stupid.';
  	}
  },
  work: function() {
  	return this.get('name') + ' is working.';
  }
});