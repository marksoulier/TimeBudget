import { render, screen } from '@testing-library/react';
import App from './time-budget';

test('renders learn react link', () => {
  render(<App />);
  const linkElement = screen.getByText(/learn react/i);
  expect(linkElement).toBeInTheDocument();
});

const buttons = document.querySelectorAll('.sidebar button');
buttons.forEach(button => {
  button.addEventListener('click', function() {
    if (this.classList.contains('option-1')) {
      document.body.innerHTML = 'This is option 1.';
    } else if (this.classList.contains('option-2')) {
      document.body.innerHTML = 'This is option 2.';
    } else if (this.classList.contains('option-3')) {
      document.body.innerHTML = 'This is option 3.';
    }
  });
});
