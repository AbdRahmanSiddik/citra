import sys
from PIL import Image

def convert_to_grayscale_jpg(input_path, output_path):
    # Buka citra
    image = Image.open(input_path)

    # Konversi citra ke grayscale
    grayscale_image = image.convert('L')

    # Simpan citra grayscale dalam format JPG
    grayscale_image.save(output_path, 'JPEG', quality=100)

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python convert_to_grayscale_jpg.py <input_path> <output_path>")
    else:
        input_path = sys.argv[1]
        output_path = sys.argv[2]
        convert_to_grayscale_jpg(input_path, output_path)
