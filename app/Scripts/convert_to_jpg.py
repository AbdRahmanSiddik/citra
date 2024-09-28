import sys
from PIL import Image

def convert_to_jpg(input_path, output_path):
    image = Image.open(input_path)
    rgb_image = image.convert('RGB')
    rgb_image.save(output_path, 'JPEG', quality=100)

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python convert_to_jpg.py <input_path> <output_path>")
    else:
        input_path = sys.argv[1]
        output_path = sys.argv[2]
        convert_to_jpg(input_path, output_path)
