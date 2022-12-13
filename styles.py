colors = [
  'cyan-500',
  'yellow-500',
  'blue-800',
  'green-500',
  'gray-500',
  'red-700',
]

prefixes = [
  '',
  'text-',
  'bg-',
  'dark:',
  'dark:hover:',
  'hover:',
  'dark:bg-',
  'dark:hover:bg-',
  'hover:bg-',
  'dark:text-',
  'dark:hover:text-',
  'hover:text-'
]

with open('./resources/views/colors.blade.php', 'w') as f:
  for prefix in prefixes:
    for color in colors:
      f.write(f'<span class="{prefix}{color}"></span>\n')