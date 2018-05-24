/*class Log{

	constructor() {
		this.messages = []
	}

	add(message) {
		this.messages.push({message, timestamp : Date.now()})
	}

	[Symbol.iterator]() {
		let i = 0;
		const messages = this.messages;
		return {
			next() {
				if( i >= messages.length )
					return { value:undefined, done:true }
				return { value: messages[i++], done: false }
			}
		}
	}
}

const log = new Log()
log.add("first day at sea")
log.add("spotted whale")
log.add("spotted another vessel")


for( let entry of log) {
	console.log(`${entry.message} @ ${entry.timestamp}`)
}*/


//First Way
/*
class FibonacciSequence {
	[Symbol.iterator]() {
		let a = 0; let b = 1;
		return {
			next() {
				let rval = { value: b, done: false };
				b += a;
				a = rval.value;
				return rval;
			}
		};
	}
}

const fib = new FibonacciSequence();
let i = 0;
for(let n of fib) {
	console.log(n);
	if(++i > 9) break;
}
*/


//second way *better way*
/*var fibonacci_series = function (n) 
{
  if (n===1) 
  {
    return [0, 1];
  } 
  else 
  {
    var s = fibonacci_series(n - 1);
    s.push(s[s.length - 1] + s[s.length - 2]);
    return s;
  }
};

console.log(fibonacci_series(8));*/

//third way
/*var i;
var fib = []; // Initialize array!

fib[0] = 0;
fib[1] = 1;
for(i=2; i<=10; i++)
{
    // Next fibonacci number = previous + one before previous
    // Translated to JavaScript:
    fib[i] = fib[i-2] + fib[i-1];
    console.log(fib[i]);
}
*/

